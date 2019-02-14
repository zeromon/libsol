<?php

/* @var $this yii\web\View */

$this->title = 'libsol';
?>
<div class="site-index">
<div class="container">
    <div class="row">
    <h1>Library for solution programing</h1>
    </div>
    <div class="row">
    <div contenteditable="true" id="content-preview"></div>
    </div>
        <!-- <figure>
            <figcaption>Your code title</figcaption>
            <pre>
                <code>
                your code here
                </code>
            </pre>
        </figure> -->
    </div>
    <div class="row">
    <button id="btn-br" class="btn btn-primary">br</button> <button id="btn-code" class="btn btn-primary">code</button>
    <!-- <div contenteditable="true" id="content-txt">testst</div>
    </div> -->
    <textarea class="form-control" name="" id="content-txt" cols="30" rows="10">testst</textarea>
    <button id="btn-submit" class="btn btn-success">Submit</button>
</div>
</div>
<script type="text/javascript">
$('#btn-br').click(function(){
    let valTextarea = $('#content-txt').val();
    let updateText = valTextarea+'<b></b>';
    $('#content-txt').val(updateText);
});

$('#btn-code').click(function(){
    let valTextarea = $('#content-txt').val();
    let templateCode = '<figure><figcaption>Your code title</figcaption><pre><code>your code here</code></pre></figure>';
    let updateText = valTextarea+templateCode;
    $('#content-txt').val(updateText);
});

$('#btn-submit').click(function(){
    $('#content-preview').html($('#content-txt').val());
});
</script>
