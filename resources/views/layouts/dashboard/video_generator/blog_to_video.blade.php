@extends('layouts.dashboard.master')
@section('title','Videos')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Blog Post To Video</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Videos</li>
               </ol>
            </div>
         </div>
         <div class="row no-print">
            <div class="col-sm-6">
               <div class="input-group input-group">
                  <input id="txtWebUrl" type="url" name="url" placeholder="Paste post url here..." class="form-control">
                  <span class="input-group-append">
                  <button id="btnFetchContent" type="button" class="btn btn-primary" style="margin-right: 5px;">
                  <i class="fas fa-search"></i> Get Content
                  </button>
                  </span>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   
   <!-- Main content -->
   <section class="content">
      <div class="row no-print">
      
      	<!-- Text content -->
         <div class="col-sm-12">
         <form>
         	@csrf
                <!-- Default box -->
                <div class="card card-outline card-primary">
                   <div class="card-header">
                      <h3 class="card-title">Article Content</h3>
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                      <form role="form">
                         <div class="row">
                            <div class="col-sm-8">
                                <div class="card card-outline card-default">
                                   <div class="card-header">
                                      <h3 class="card-title">Contents</h3>
                                   </div>
                                   
                                   <!-- textarea -->
                                   <div class="card-body">
                                       <div class="form-group">
                                          <textarea name="txtFetchedContent" id="txtFetchedContent" class="form-control" rows="15" placeholder="Article content..."></textarea>
                                       </div>
                                   </div>
                               </div>
                            </div>
                            
                            
                            
                            <!-- Settings -->
                             <div class="col-sm-4">
                                <!-- Default box -->
                                <div class="card card-outline card-default">
                                   <div class="card-header">
                                      <h3 class="card-title">Video Settings</h3>
                                   </div>
                                   <!-- /.card-header -->
                                   <div class="card-body">
                                      
                                         <div class="row">
                                            <div class="col-sm-12">
                                               <!-- textarea -->
                                               <div class="form-group">
                                                  <label>Narration Audio</label>
                                               </div>
                                               
                                               <div class="form-group">
                                                  <!-- <label for="customFile">Custom File</label> -->
                                                  <div class="input-group">
                                                      <select class="custom-select" id="optionVoiceNarrator" name="optionVoiceNarrator">
                                                        <option value="1" data-url="{{ asset('voice-preview/john.mp3') }}">John (Male)</option>
                                                        <option value="2" data-url="{{ asset('voice-preview/nancy.mp3') }}">Nancy (Female)</option>
                                                      </select>
                                                      <div class="input-group-append">
                                                       		<button id="btnAudioPreview" class="btn btn-secondary" type="button" style="margin-right: 5px;">
                                                            	<i class="fas fa-play"></i> 
                                                          	</button>
                                                      </div>
                                                    </div>
                                               </div>
                                               
                                            </div>
                                         </div>
                                      
                                   </div>
                                   <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                             </div>
                             <!-- End settings -->
                         </div>
                         
                         <div class="row text-center">
                         	<div class="col-sm-12">
                               <!-- Button -->
                                <div class="form-group">
                                	<button id="btnGenerateVideo" class="btn btn-primary" type="button"><i class="fa fa-play-circle"></i> Generate Video</button>
                                </div>
                                </div>
                         </div>
                      </form>
                   </div>
                   <!-- /.card-body -->
                </div>
                <!-- /.card -->
                
            </form>
         </div>
         <!-- End text content -->
         
         
         
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
@section('scripts')
<script>

function disableContent()
{
   // Disable
   $(".content").find("*").prop('disabled', true);
}

function enableContent()
{
   // Enable
   $(".content").find("*").prop('disabled', false);
}

   $(document).ready(function(){

	   disableContent();
	   

	   // Fetch content button
       	$('#btnFetchContent').click(function(){
       
       		// Redirect to video options page
       		var webUrl = $.trim($('#txtWebUrl').val());
       		
       		$.ajax({
       			  method: 'POST',
       			  type: 'json',
       			  url: "http://videopixy_api.test/api/v1/video/fetch-content",
       			  data: {
       				  'weburl': webUrl
       			  }
       		}).fail(function(err){
       			alert('Error occured');
       		}).done(function(response) {
       			enableContent();
       			
       			$('#txtFetchedContent').text('');
       		   $('#txtFetchedContent').text((response.content));
       		});
       	});

        // Audio preview button
       	$('#btnAudioPreview').click(function(){
			var audioFileUrl = $('#optionVoiceNarrator').find(':selected').data('url');

			obj = new Audio(audioFileUrl);
			obj.play();
		
       	});

       	// Generate video button
       	$('#btnGenerateVideo').click(function(){

       		// Redirect to video options page
       		var article = $.trim($('#txtFetchedContent').val());
       		
       		$.ajax({
     			  method: 'POST',
     			  type: 'json',
     			  url: siteUrl + "/dashboard/ajax/video/generate",
     			  data: {
     				  'article': article,
     				 _token: $('input[name=_token]').val(),
     			  }
     		}).fail(function(err){
     			alert('Error occured');
     		}).done(function(response) {
     			
     		});
       	});
   	
   });
   
</script>
@endsection