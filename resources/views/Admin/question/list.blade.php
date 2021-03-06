<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">{{$quiz->title}} Quizine Ait Sorular </x-slot>
    <div class="card">
       <div class="card-body">
       
           <h5 class="card-title display: inline; margin:left-outo;">
           <a href="{{route('questions.create',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Soru Oluştur</a>
           </h5>
           <h5 class="card-title">
           <a href="{{route('quizzes.index')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left">Quizlere Dön</i></a>
           </h5>
                    <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                    <th scope="col">Soru</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">1. Cevap</th>
                    <th scope="col">2. Cevap</th>
                    <th scope="col">3. Cevap</th>
                    <th scope="col">4. Cevap</th>
                    <th scope="col">Doğru Cevap</th>
                    <th scope="col" style="width:100;">işlemler</th>
                   
                    </tr>
                    @foreach($quiz->questions as $question)
                    <tr>
                    <td>{{$question->question}}</td>
                    <td>
                        @if($question->image)
                        <a href="{{asset($question->image)}}" target="_blank" class="btn btn-sm btn-light">Görüntüle</a>
                        @endif
                    </td>
                    <td>{{$question->answer1}}</td>
                    <td>{{$question->answer2}}</td>
                    <td>{{$question->answer3}}</td>
                    <td>{{$question->answer4}}</td>
                    <td class="text-success" >{{substr($question->correct_answer,-1)}}. Cevap</td>
                    <td>
                        <a href="{{route('questions.edit',[$quiz->id,$question->id])}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="{{route('questions.destroy',[$quiz->id,$question->id])}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        
                    </tr>
                    @endforeach
                </thead>
                <tbody>
                    
                </tbody>
                </table>
                
       </div>
   </div>
    
</x-app-layout>
