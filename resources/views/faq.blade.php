@extends('layouts.app')

@section('content')
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Al-Mishkah<span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="btn-trial"><a href="/login">Log in</a></li>
          <li class="btn-trial"><a href="/register">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <!--/ Navigation bar-->
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

$faq=DB::select("select * from faqs");

echo "<table class = 'table' border=3px>
<tr>
<th>Question</th>
<th>Answer</th>

</tr>";
foreach ($faq as $faq) {
    echo "<tr>";
    echo "<td>" . $faq->question . "</td>";
    echo "<td>" . $faq->answer . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
