{{-- <div class="list-group">
    <a href="#" class="list-group-item active">School</a>
    <a href="#" class="list-group-item">Session</a>
    <a href="#" class="list-group-item">Class</a>
    <a href="#" class="list-group-item">Section</a>
    <a href="#" class="list-group-item">Class-Section</a>
    <a href="#" class="list-group-item">Students</a>
    <a href="#" class="list-group-item">Link</a>
    <a href="#" class="list-group-item">Link</a>
    <a href="#" class="list-group-item">Link</a>
    <a href="#" class="list-group-item">Link</a>
</div>    --}}

        <div class="thumbnail">
            <img src="{{ asset('images\abcd.jpg')}}" alt="..." class="img-thumbnail">
            <div class="caption">
                <h6 align="center">Thumbnail label</h6>                
                <p align="center">
                    <a href="#" class="btn btn-primary btn-xs" role="button">Change</a> 
                    <a href="#" class="btn btn-success btn-xs" role="button">Browse</a>
            </p>
            </div>
      </div>

{{-- <div class="panel panel-default">
    <div class="panel-body">
        Basic panel example
    </div>
</div> --}}



<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Menu 01
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          Anim pariatur cliche
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Menu 02
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          Anim pariatur cliche reprehenderit, e
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Menu 03
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          Anim pariatur cliche 
        </div>
      </div>
    </div>
  </div>