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
            <h1>Videos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Videos</li>
            </ol>
          </div>
        </div>
        
        <div class="row no-print">
        	<div class="col-sm-4">
        	
            	<div class="input-group">
                  <select class="custom-select" id="optionVideoConvertType" name="optionVideoConvertType">
                    <option selected>Select Option...</option>
                    <option value="1" data-url="{{ route('article.video.form') }}">Blog Post Link to Video</option>
                    <option value="2" data-url="{{ route('article.video.form') }}">Text Article to Video</option>
                    <option value="3" data-url="{{ route('article.video.form') }}">Voice Over to Video</option>
                  </select>
                  <div class="input-group-append">
                   <button id="btnSubmitOption" class="btn btn-primary" style="margin-right: 5px;" >
                        <i class="fas fa-play-circle"></i> Generate Video
                      </button>
                  </div>
                </div>
            </div>
        </div>
        
        {{--
        <div class="row no-print">
        
                  <div class="col-sm-4">
                <form action="{{ route('videos.store') }}" method="post">
                @csrf
                <div class="input-group input-group">
                  
                  <input type="url" name="url" placeholder="Paste post url here..." class="form-control">
                  <span class="input-group-append">
                     <button type="submit" class="btn btn-primary" style="margin-right: 5px;">
                    <i class="fas fa-search"></i> Search
                  </button>
                  </span>
                
                </div>
                   </form>
                </div> 
                 <button class="btn btn-primary" style="margin-right: 5px;"  data-toggle="modal" data-target="#modal-default">
                    <i class="fas fa-play-circle"></i> Generate Video
                  </button>
              </div>
              --}}
      </div><!-- /.container-fluid -->
      
      <!-- Modal -->
      <div class="modal fade" id="modal-default" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Choose Option</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
             <div class="form-group">
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="radioBlogPost" name="optionVideoConvertType">
                  <label for="radioBlogPost" class="custom-control-label">Blog Post Link to Video</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="radioManualTextArticle" name="optionVideoConvertType">
                  <label for="radioManualTextArticle" class="custom-control-label">Text Article to Video</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" id="radioVoiceOver"  name="optionVideoConvertType">
                  <label for="radioVoiceOver" class="custom-control-label">Voice Over to Video</label>
                </div>
              </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Next</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- End Modal -->
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body p-0">

          <table class="table table-responsive-sm table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Video Title
                      </th>
                      <th style="width: 30%">
                          Social Media
                      </th>
                      <th>
                          Progress
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              5 Foods to eat on a Keto Diet
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <i class="fab fa-facebook fa-fw fa-2x"></i>
                                
                              </li>
                              <li class="list-inline-item">
                                  <i class="fab fa-youtube fa-fw fa-2x"></i>
                              </li>
                              
                              <li class="list-inline-item">
                                  <i class="fab fa-linkedin fa-fw fa-2x"></i>
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-primary">Pending</span>
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                             3 Breakfast ideas for summer
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <i class="fab fa-facebook fa-fw fa-2x"></i>
                              </li>
                              <li class="list-inline-item">
                                  <i class="fab fa-youtube fa-fw fa-2x"></i>
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="100" aria-volumemin="0" aria-volumemax="100" style="width: 100%">
                              </div>
                          </div>
                          <small>
                              100% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                      </td>
                  </tr>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection

@section('scripts')
<script>
$(document).ready(function(){

	$('#btnSubmitOption').click(function(){

		// Redirect to video options page
		location.href = $('#optionVideoConvertType').find(':selected').data('url');

	});
	
});

</script>
@endsection