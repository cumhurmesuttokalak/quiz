<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">Quizler </x-slot>
    <div class="card">
       <div class="card-body">
           <h5 class="card-title">
           <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz Oluştur</a>
           </h5>
                        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Quiz</th>
                    <th>Soru Sayısı</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizzes as $quiz)
                    <tr>
                    <td>{{$quiz->title}}</td>
                    <td>{{$quiz->questions_count}}</td>
                    <td>
                    @switch($quiz->status)
                            @case('publish')
                            <span class="badge bg-success">Aktif</span>
                            @break
                            @case('passive')
                            <span class="badge bg-danger">Pasif</span>
                            @break
                            @case('draft')
                            <span class="badge bg-warning">Taslak</span>
                            @break
                        @endswitch
                    </td>
                    <td>
                        <span title="{{$quiz->finished_at}}">
                            {{$quiz->finished_at ? $quiz->finished_at->diffForHumans() : '-'}}
                        </span>
                    </td>
                    <td>
                        <a href="{{route('questions.index',$quiz->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-question"></i></a>
                        <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="{{route('quizzes.destroy',$quiz->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{$quizzes->links()}}
       </div>
   </div>
    
</x-app-layout>
