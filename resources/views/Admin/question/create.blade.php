<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">{{$quiz->title}} için yeni soru oluştur </x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('questions.store',$quiz->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Soru</label>
                <textarea type="textarea" name="question" class="form-control" value="{{old('question')}}" rows="4"></textarea>

            </div>
            <div class="form-group">
                <label for="">Fotoğraf</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label for="">1. Cevap</label>
                <textarea type="textarea" name="answer1" class="form-control" value="{{old('answer1')}}" rows="2"></textarea>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label for="">2. Cevap</label>
                <textarea type="textarea" name="answer2" class="form-control" value="{{old('answer2')}}" rows="2"></textarea>
                </div>
                </div>
                </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label for="">3. Cevap</label>
                <textarea type="textarea" name="answer3" class="form-control" value="{{old('answer3')}}" rows="2"></textarea>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label for="">4. Cevap</label>
                <textarea type="textarea" name="answer4" class="form-control" value="{{old('answer4')}}" rows="2"></textarea>
                </div>
                </div>
                </div>

                <div class="form-group">
                    <label>Doğru Cevap</label>
                    <select name="correct_answer" class="form-control">
                    <option @if(old('correct_answer')=='answer1') selected @endif value="answer1">1. Cevap</option>
                    <option @if(old('correct_answer')=='answer2') selected @endif value="answer2">2. Cevap</option>
                    <option @if(old('correct_answer')=='answer3') selected @endif value="answer3">3. Cevap</option>
                    <option @if(old('correct_answer')=='answer4') selected @endif value="answer4">4. Cevap</option>
                    </select>
                </div>

            
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Soru Oluştur</button>
            </div>

            </form>
        </div>
    </div>
    
</x-app-layout>
