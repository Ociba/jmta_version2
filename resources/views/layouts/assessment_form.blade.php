<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Assessment Form</h4>
                <h6 class="card-subtitle text-white">Praise the Lord Jesus Christ and thank you so much for choosing to undertake the reading of 40 chapters daily as a precursor for the JOHN MULINDE TRUMPET ACADEMY. Please answer the following questions to help our team prepare for you the next level.</h6>
                <form class="form-material m-t-40" action="/submit-assessment" method="post" enctype="multipart/form-data">
                 @csrf
                    <div class="form-group">
                        <label class="text-white">1. How many hours, every day, did it take you to finish the forty chapters? </label>
                        <input type="text" class="form-control form-control-line text-white" value="" name="question_one"> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">2.	Did you read the forth chapters at once daily, or did you break them down into different time slots?</label>
                        <input type="text" id="example-email2" name="question_two" class="form-control text-white" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">(If in different slots please indicate).</label>
                        <input type="text" class="form-control" name="question_if" value=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">3.	In three to five sentences please describe your bible marathon experience?</label>
                        <input type="text" class="form-control" name="question_three" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">4.	In three to five sentences please indicate to us how enjoyable the Bible reading process was to you</label>
                        <input type="text" class="form-control" name="question_four" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">5.	Is it worth doing again?</label>
                        <input type="text" class="form-control" name="question_five" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">6.	How has this experience influenced your knowledge of God (explain in three to five sentences)?</label>
                        <input type="text" class="form-control" name="question_six" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">7.  How has your life been transformed by the Bible reading experience, in terms of;</label>
                    </div>
                    <div class="form-group">
                        <label class="text-white">(i) Prayer?</label>
                        <input type="text" class="form-control" name="question_seven_one" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">(ii) worship</label>
                        <input type="text" class="form-control" name="question_seven_two" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">(iii) Meditation?</label>
                        <input type="text" class="form-control" name="question_seven_three" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">(iv) Waiting upon God i.e. quiet time?</label>
                        <input type="text" class="form-control" name="question_seven_four" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">8.	What challenges did you encounter during your Bible Marathon?</label>
                        <input type="text" class="form-control" name="question_eight" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">9.	Did you overcome those challenges?</label>
                        <input type="text" class="form-control" name="question_nine" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">10.	If yes, how did you overcome?</label>
                        <input type="text" class="form-control"  name="question_ten" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">11.	Would you like us to pray with you over anything in relation to the Bible Marathon?</label>
                        <input type="text" class="form-control" name="question_eleven" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">12.	Do you have any testimonies you would like to share with us? (Please share in full details)</label>
                        <input type="text" class="form-control" name="question_twelve" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">13.	 How did you get to know about the Bible Marathon?</label>
                        <input type="text" class="form-control" name="question_thirteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">14.	 What made you decide to join?</label>
                        <input type="text" class="form-control" name="question_fourteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">15.	When you started and tasted it, did you influence someone else to join you in the Marathon?</label>
                        <input type="text" class="form-control" name="question_fifteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">16.	 If so, what has been their experience of the Marathon (to the best of your knowledge)?</label>
                        <input type="text" class="form-control" name="question_sixteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">17.	   Would You be willing to co-opt two other people to walk the Bible Marathon journey just as you have?</label>
                        <input type="text" class="form-control" name="question_seventeen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">18.	Will you please get two people to join the next Bible Marathon?</label>
                        <input type="text" class="form-control" name="question_eighteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">19.	Are there any changes or improvements you would recommend in the Bible Marathon program??</label>
                        <input type="text" class="form-control" name="question_nineteen" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="text-white">20.	What final word would you leave with the JMTA team?</label>
                        <input type="text" class="form-control" name="question_twenty" placeholder=""> 
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold text-white">21.	Please do a video recording of yourself and share your experience of the Bible Marathon.  Share any challenges you went through, any breakthroughs, any testimonies, any people you got involved, etc.  
                      You can use your phone or tablet.  Please do your recording in day light or in good light.
                      </label>
                        <input type="file" class="form-control" name="video_recording" placeholder=""> 
                    </div>
                    <input type="text" class="form-control"  placeholder="">
                    <div class="text-center">
                        <label class="text-white">WELCOME TO THE NEXT COURSE IN THE JOHN MULINDE TRUMPET ACADEMY!!!</label>
                        <p class="help-block text-center text-white text-muted"><small>SHALOM</small></p> 
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>