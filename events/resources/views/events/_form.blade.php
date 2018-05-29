<div class="form-group {{ $errors->has('title') ? 'has-error':''}}">
			<label for="title" class="control-label sr-only">Titre</label>
			<input type="text" id="title" name="title" placeholder="Titre de l'evenement" value="{{old('title') ?? $event->title}}" class="form-control" />
			{!!$errors->first('title','<span class="help-block">:message</span>')!!}
</div>
		<div class="form-group {{ $errors->has('title') ? 'has-error':''}}">
			<label for="description" class="control-label sr-only">Description</label>
			<textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="description de l'evenement" >{{old('description') ?? $event->description}}</textarea>
			{!!$errors->first('description','<span class="help-block">:message</span>')!!}
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block" value="{{$submitButtonText}}"/>
		</div>	