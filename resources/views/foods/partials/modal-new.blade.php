 
  <!-- Modal -->
<div class="modal fade" id="newFoodModal" tabindex="-1" aria-labelledby="newFoodModal" aria-hidden="true">
    {!! Form::model('$food',['route'=>'newFood']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Food</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="col">
                    <div class="mb-3">
                        {!! Form::label('name', 'Name',['class'=>'form-label']) !!}
                        {!! Form::text('name', old(''), ['class'=>'form-control', 'aria-describedby'=>'nameFormControl']) !!}                        
                        <div id="nameFormControl" class="form-text">Input the food name</div>
                    </div>
                    <div class="mb-3">
                        {!! Form::label('description', 'Description',['class'=>'form-label']) !!}
                        {!! Form::text('description', old(''), ['class'=>'form-control', 'aria-describedby'=>'descriptionFormControl']) !!}                        
                        <div id="descriptionFormControl" class="form-text">Input the food description</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>