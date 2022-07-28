@extends("Shop.BackendPanel.layout")
@section('content')

<div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="page-title">
            <h1>Media
            </h1>
          </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-12">
              <div class="card">
                <form action="{{ URL::to('shop-/save-media') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" class="mb-5">
                    <button type="submit" style="width: 200px">Insert Image</button>
                </form>
              </div>
            </div>
        </div>
        <div class="row mb-5">

            @if(!empty($allMedias))
                @foreach ($allMedias as $media)
                    
                
                    <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ $media->image_url }}" style="height: 200px;">
                        <input type="text" value="{{ $media->image_url }}"/>
                    </div>
                    </div>
                   

                @endforeach
                @endif
                <div class="text-center">{{$allMedias->links()}}</div>
            {{-- <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon">
                    <i class="ti-file bg-success"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-success">Profit</div>
                    <div class="stat-text">3600000</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon">
                    <i class="ti-info bg-danger"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-primary">Growth</div>
                    <div class="stat-text">200%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon bg-warning">
                    <i class="ti-world"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-primary">Revenue</div>
                    <div class="stat-text">226000</div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
      </div>
    </div>
</div>

@endsection