{% extends 'base.html.twig' %}
{% block content %}
{%  set i = 0  %}
{% for article in articles %}
{% if (i%3 == 0) %}
<div class="row">
    {% endif %}
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <header>
            <h1><a href="article.php?id={{ article.id }}">{{ article.title }}</a></h1>
            <img title="{{ article.title }}" alt="{{ article.title }}" src="{{ article.image }}">
            <small>Written by {{ article.id }} on {{ article.created_at|date('d-m-y') }} </small>
        </header>
        <div class="content">
            <p>{{ article.content }}</p>
        </div>
        <footer>
            <p>Posted in category: <a href="article?id={{ article.category_id }}">{{ article.category_id }}</a></p>
            <p><a href="tag?id={{ article.category_id }}"><span class="label label-primary">Primary</span></a></p>
        </footer>
    </article>

    {% if (i%3 == 2) %}
</div>
{% endif %}
{% set i = i+1 %}
{% endfor %}

<ul class="pagination">
    <li {% if 1 == currentPage %}class="disabled"{% endif %} ><a href="index.php?p={{ currentPage -1 }}">&leftarrow;</a></li>

    {% for i in range(1, nbPages) %}
    <li {% if i == currentPage %}class="active"{% endif %} ><a href="index.php?p={{ i }}">{{ i }}</a></li>
    {% endfor %}

    <li {% if nbPage == currentPage %}class="disabled"{% endif %}><a href="index.php?p={{ currentPage +1 }}">&rightarrow;</a></li>
</ul>
{% endblock %}