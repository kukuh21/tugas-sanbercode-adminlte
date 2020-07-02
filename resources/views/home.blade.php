@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content" id="dw">
            <div class="container-fluid">
                <div class="row">

                  <div class="card col-md-12">
                    <div class="card-header with-border">
                        <h3 class="card-title">Progress Bar</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-warning">70%</span></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-primary">30%</span></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                              <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-success" style="width: 90%"></div>
                              </div>
                            </td>
                            <td><span class="badge bg-success">90%</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  @datatable

                  @enddatatable

                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
@endsection