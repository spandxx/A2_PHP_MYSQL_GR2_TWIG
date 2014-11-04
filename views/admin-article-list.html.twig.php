{% extends 'base.html.twig' %}
{% block content %}
<h1>Administration: List Articles <a class="btn btn-primary" href="../template/admin-article-add.php">Add <span class="glyphicon glyphicon-plus-sign"></span></a></h1>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>CreatedAt</th>
        <th>Enabled</th>
        <th>Activate</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    {% for article in articles %}
    <tr>
        <td><a href="../article.php?id={{ article.id }}" target="_blank">{{ article.id }}</a></td>
        <td>{{ article.title }}</td>
        <td>{{ article.content }}</td>
        <td><img src="{{ article.image }}" alt="{{ article.title }}" width="50" height="35"></td>
        <td>{{ article.created_at|date('d-m-Y') }}</td>
        {% if article.enabled == 1 %}
        <td><span class="label label-success">enabled</span></td>
        <td><a href="admin-article-activate.php?id={{ article.id }}&activate=false">Desactivate</a></td>
        {% else %}
        <td><span class="label label-danger">disabled</span></td>
        <td><a href="admin-article-activate.php?id={{ article.id }}&activate=1">Activate</a></td>
        {% endif %}
        <td><a href="admin-article-edit.php?id={{ article.id }}">Edit</a></td>
        <td><a href="admin-article-delete.php?id={{ article.id }}">Delete</a></td>
    </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}