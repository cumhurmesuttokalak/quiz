<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">Quiz Oluştur </x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('quizzes.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Quiz Başlığı</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="">Quiz Açıklaması</label>
                <textarea type="textarea" name="description" class="form-control" value="{{old('description')}}" rows="4"></textarea>
            </div>
            <div  class="form-group">
                <input id="isFinished" @if(old('finished_at')) checked @endif type="checkbox"> 
                <label for="">Bitiş Tarihi Olacak Mı?</label>
            </div>
            <div id="finishedInput" @if(!old('finished_at')) style="display: none" @endif class="form-group">
                <label for="">Bitiş Tarihi</label>
                <input type="datetime-local" value="{{old('finished_at')}}" name="finished_at" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Ekle</button>
            </div>

            </form>
        </div>
    </div>
    <x-slot name="js">
     <script>
         $('#isFinished').change(function(){
             if($('#isFinished').is(':checked')){
                 $('#finishedInput').show();
             }else{
                $('#finishedInput').hide();
             }
             })
         
     </script>           
</x-slot>
</x-app-layout>
