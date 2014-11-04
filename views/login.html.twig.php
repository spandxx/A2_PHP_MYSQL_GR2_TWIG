{% extends 'base.html.twig' %}
{% block content %}


<h1>Login</h1>

{% if missing_credential == true %}

<div class="alert alert-danger fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
    <strong>Warning!</strong> At least one field is empty, please enter a <i>username</i> AND a <i>password</i>.
</div>
{% endif %}

{% if credential_error == true %}
<div class="alert alert-warning fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
    <strong>Error!</strong> Credentials are not correct, please enter a new <i>password</i> or change <i>username</i>.
</div>
{% endif %}

<form id="loginForm" role="form" method="post">
    <div class="form-group">
        <label for="username">Username: </label>
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>

    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    </div>
    <button type="submit" class="btn btn-default" name="loginSubmit">Submit</button>
</form>

{% endblock %}