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
        <h5 class="widgetheading" style="color: #354e9d">Social Interactions</h5>
        <ul class="cat">
            <li><i class="fa fa-angle-right"></i><a href="#">Facebook</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">Twitter</a></li>

        </ul>
    </div>

</aside>