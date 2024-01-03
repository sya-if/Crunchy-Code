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

#timerContainer {
    margin-top: 20px;
    font-size: 18px;
    text-align: center;
  }

  #timer {
    font-weight: bold;
    color: #fff;
    background-color: #2A265F;
    padding: 8px 12px;
    border-radius: 5px;
  }

  .question-container {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #fff;
    }
</style>
<script>
    var timer;
    var totalTime = 100; // Set the total time for the quiz in seconds (e.g., 10 minutes)

    // Call this function when the page is loaded
    window.onload = function() {
        startTimer();
    };

    function startTimer() {
        var minutes, seconds;
        timer = setInterval(function() {
            minutes = parseInt(totalTime / 60, 10);
            seconds = parseInt(totalTime % 60, 10);

            document.getElementById('timer').innerHTML = minutes + 'm ' + seconds + 's';

            if (--totalTime < 0) {
                clearInterval(timer);
                // Call a function to handle time expiration (e.g., submit the quiz)
                checkAnswers();
            }
        }, 1000);
    }

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
            displayAnswerFeedback({{ $key + 1 }}, 'Correct!', 'text-success');
        } else {
            incorrectQuestions.push({ 
                questionNumber: {{ $key + 1 }},
                correctAnswer: correctAnswer,
                userAnswer: selectedAnswer
            });
            displayAnswerFeedback({{ $key + 1 }}, 'Incorrect. Correct Answer: ' + correctAnswer, 'text-danger');
        }
    @endforeach

    // Display the overall score
    var score = correctCount / totalQuestions * 100;
    var scoreFeedback = 'Your Score: ' + score.toFixed(2) + '%';

    // Display the result in the modal
    $('#resultText').text(scoreFeedback);
    $('#resultModal').modal('show');

    // Display the overall score in your existing feedback
    displayAnswerFeedback('total', scoreFeedback, 'font-weight-bold');

    // Optionally, you can display additional feedback or perform other actions as needed

        // Optionally, you can display additional feedback or perform other actions as needed
    }

    function displayAnswerFeedback(questionNumber, feedback, styleClass) {
        // Remove any existing feedback for the current question
        $('.question-container:eq(' + (questionNumber - 1) + ') .feedback-message').remove();

        // Create a div to display feedback
        var feedbackDiv = $('<div></div>').addClass('feedback-message ' + styleClass).html(feedback);

        // Append the feedback below the corresponding question
        $('.question-container:eq(' + (questionNumber - 1) + ')').append(feedbackDiv);
    }

    function closeResultModal() {
        $('#resultModal').modal('hide');
       
}

    function refreshQuestions() {
        // Reload the page or perform any action needed to refresh the questions
        location.reload();
    }
</script>



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
					<div class="button-container">
						<div id="timerContainer">
							Time Left: <span id="timer"></span>
						</div>


						<div class="blog-caption" style="color : #000;">
							<form>
								@foreach($quiz->subquizzes as $key => $subquiz)
								<div class="question-container">
								<h6>Question {{ $key + 1 }}</h6>
								<pre>
									<p>{{ $subquiz->question_text }}</p>
								</pre>

								@if($subquiz->photo)
                    <img src="{{ asset ('uploads/quizzes/'.$subquiz->photo)}}" style="width:300px;">
                @endif
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
							</div>

								@endforeach
								<div class="button-container">
									<button class="btn btn-primary" type="button" id="checkAnswersBtn" onclick="checkAnswers()">Check Answers</button>
									<button class="btn btn-success" type="button" id="refreshQuestionsBtn" onclick="refreshQuestions()">Refresh Questions</button>
								</div>

							</form>

              <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="resultModalLabel">Quiz Result</h5>
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p id="resultText"></p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeResultModal()">Close</button>
                    </div>
                  </div>
                </div>
              </div>



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

@endsection