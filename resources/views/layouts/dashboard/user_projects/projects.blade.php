@extends('layouts.dashboard.master')

@section('title','Projects')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
        
        <div class="row no-print">
        
                <div class="col-sm-6">
                
                  <span class="input-group-append">
                     <button type="button" class="btn btn-primary" style="margin-right: 5px;">
                    <i class="fas fa-plus"></i> New Project
                  </button>
                  </span>
                
              
                </div>
              </div>
      </div><!-- /.container-fluid -->
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
        <div class="card-body table-responsive-sm p-0">

          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Project Title
                      </th>
                      <th style="width: 30%">
                          Social Media
                      </th>
                      <th>
                          Videos Created
                      </th>
                     
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              	@for($i = 0; $i < 10; $i ++)
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              Diet Product Marketing
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
                      <td>
                          <strong>
                              52
                          </strong>
                      </td>
                    
                     <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endfor
                  
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