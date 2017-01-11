<aside class="right-sidebar">

    <div class="widget">
        <h5 class="widgetheading" style="color: #354e9d">Latest Services</h5>
        <ul class="recent">
            @foreach($ibada as $all)
                <li>
                    <img src={{url("img/dummies/blog/65x65/thumb1.jpg")}} class="pull-left" alt="" />
                    <h6><a href="#" style="color: #354e9d">Topic :{{$all->topic}}</a></h6>
                    <p>
                        <b>Verse:</b>{{$all->verse}}
                        <b>Speaker:</b> {{$all->speaker}}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="widget">
        <h5 class="widgetheading" style="color: #354e9d">Latest Events</h5>
        <ul class="recent">
            @foreach($event as $value)
                <li>
                    <h6><a href="{{url('events/'.$value->id.'/'.str_slug($value->title, '-'))}}" style="color: #354e9d">{{$value->title}}</a></h6>
                    <img src="{{url('/public/eventimages/'.$value->image)}}" style="height: 65px;width: auto" alt="" class="img-responsive" />
                </li>

                <br>
            @endforeach
        </ul>
    </div>

    <div class="widget">
        <h5 class="widgetheading" style="color: #354e9d">Social Interactions</h5>
        <div class="fb-page" data-href="https://www.facebook.com/Kakamega-Friends-Church-1970938253132964/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/idleyouthscorner/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/idleyouthscorner/">Kakamega Friends church.</a></blockquote></div>
    </div>

</aside>