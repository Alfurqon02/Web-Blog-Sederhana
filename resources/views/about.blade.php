@extends('layouts.main')
    @section('container')

      <div class="mt-5 pt-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">{{ Auth::user()->name }}</h5>
                
                  <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-primary disabled">Follow</button>
                    <button type="button" class="btn btn-outline-primary ms-1 disabled">Message</button>
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">User ID</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{ Auth::user()->id }}</p>
                        </div>
                      </div>
                      <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->username }}</p>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
          </div>
        </div>
    @endsection