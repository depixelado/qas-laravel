<div class="question-snippet">
    <h4 class="question-snippet__title">{{$question->title}}</h4>
    <div class="question-sippet__extra">
        <div class="question-sippet__author">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            By {{$question->user->name}}
        </div>
        <div class="question-sippet__answers">
            <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
            {{count($question->answers)}} answers
        </div>
    </div>
</div>
