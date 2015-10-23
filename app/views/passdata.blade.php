<?php
/**
 * Created by PhpStorm.
 * User: Thongdh60102
 * Date: 10/23/15
 * Time: 2:44 PM
 */?>
<p><strong>UserName:</strong> {{$username}} </p>
<p><strong>Email:</strong>{{$email}}</p>
<p><strong>Today is :</strong>{{date("d-m-Y")}}</p>

<p>
    {{{ '<title>Freetuts.net</title>' }}}
    @{{$email}}
</p>

@if ($value == 1)
    {
       value is 1
    }
@else {
    No value
 }
@endif