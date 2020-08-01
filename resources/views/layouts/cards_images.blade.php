<!-- Row -->
<div class="row">
    <div class="col-12">
        <h4 class="d-inline">Courses</h4>
        <p></p>
        <div id="code1" class="collapse">
            <div class="highlight">
                <pre>    <code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
</pre>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- column -->
            @foreach($courses as $course)
            <div class="col-lg-6 col-md-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$course->course_name}}</h4>
                        <p class="card-text">{{$course->course_description}}</p>
                        <a href="/get-payment-methods/{{$course->id}}" class="btn btn-primary">Enroll For This Course</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
            @endforeach
        </div>
        <!-- Row -->
    </div>
</div>
<!-- End Row -->