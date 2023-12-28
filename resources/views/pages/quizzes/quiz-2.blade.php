@extends('layouts.master')

@php($user = Auth::user())

@section('content')

<style>
/* CSS */
.button-74 {
  background-color: #fbeee0;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 4px 4px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-74:hover {
  background-color: #fff;
}

.button-74:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button-74 {
    min-width: 120px;
    padding: 0 25px;
  }
}

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 95%;
}

.course h6 {
  color: #fff !important;
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
  color: #fff !important;
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 20px;
	max-width: 300px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px; 
}
#resultContainer {
	float: right;
	margin-right: 20px; /* Adjust the margin as needed */
}
.button-container {
        margin-top: 10px; /* Adjust the margin as needed */
}

</style>


<div class="main-container">
  <div class="pd-ltr-20 height-100-p xs-pd-20-10">
      <div class="min-height-200px">

        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Crunchy Quiz</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('quiz')}}">Quiz</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quiz {{$quizId}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
		<div class="container pd-0">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="blog-detail card-box overflow-hidden mb-30">
						<div class="blog-caption" style="color : #000;">
							<form>
								@foreach($quiz->subquizzes as $key => $subquiz)
								<h6>Question {{ $key + 1 }}</h6>
								<pre>
									<p>{{ $subquiz->question_text }}</p>
								</pre>

								<div class="form-check">
									<input class="form-check-input" type="radio" name="answer_{{ $key }}" id="answer_{{ $key }}_1" value="{{ $subquiz->answer_1 }}">
									<label class="form-check-label" for="answer_{{ $key }}_1">
										A. {{ $subquiz->answer_1 }}
									</label>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="radio" name="answer_{{ $key }}" id="answer_{{ $key }}_2" value="{{ $subquiz->answer_2 }}">
									<label class="form-check-label" for="answer_{{ $key }}_2">
										B. {{ $subquiz->answer_2 }}
									</label>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="radio" name="answer_{{ $key }}" id="answer_{{ $key }}_3" value="{{ $subquiz->answer_3 }}">
									<label class="form-check-label" for="answer_{{ $key }}_3">
										C. {{ $subquiz->answer_3 }}
									</label>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="radio" name="answer_{{ $key }}" id="answer_{{ $key }}_4" value="{{ $subquiz->answer_4 }}">
									<label class="form-check-label" for="answer_{{ $key }}_4">
										D. {{ $subquiz->answer_4 }}
									</label>
								</div>

								<br><br>
								@endforeach
								<div class="button-container">
									<button class="btn btn-primary" type="button" id="checkAnswersBtn" onclick="checkAnswers()">Check Answers</button>
									<button class="btn btn-success" type="button" id="refreshQuestionsBtn" onclick="refreshQuestions()">Refresh Questions</button>
								</div>

							</form>


						</div>
					</div>
				</div>
			</div>
		</div>
      </div>
  </div>

  <div class="footer-wrap pd-20 mb-20 card-box">
    Crunchy Code Web Application System developed by Elysium
  </div>

</div>
<script>
    function checkAnswers() {
        var totalQuestions = {{ count($quiz->subquizzes) }};
        var correctCount = 0;
        var incorrectQuestions = [];

        // Loop through each question
        @foreach($quiz->subquizzes as $key => $subquiz)
            // Get the selected answer for the current question
            var selectedAnswer = $('input[name="answer_{{ $key }}"]:checked').val();

            // Get the correct answer from the database
            var correctAnswer = '{{ $subquiz->answer }}';

            // Check if the selected answer is correct
            if (selectedAnswer === correctAnswer) {
                correctCount++;
            } else {
                incorrectQuestions.push({ 
                    questionNumber: {{ $key + 1 }},
                    correctAnswer: correctAnswer,
                    userAnswer: selectedAnswer
                });
            }
        @endforeach

        // Display the results using an alert popup
        var score = correctCount / totalQuestions * 100;

        if (correctCount === totalQuestions) {
            alert('Your Score: ' + score.toFixed(2) + '%\nAll questions are correct!');
        } else {
            var errorMessage = 'Your Score: ' + score.toFixed(2) + '%\nIncorrectly Answered Questions:\n';

            incorrectQuestions.forEach(function(q) {
                errorMessage += 'Question ' + q.questionNumber + '\n';
            });

            alert(errorMessage);
        }
    }

    function refreshQuestions() {
        // Reload the page or perform any action needed to refresh the questions
        location.reload();
    }
</script>
@endsection