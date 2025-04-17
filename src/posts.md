---
title: posts
nav:
    label: posts
    order: 3
layout: base.njk
---

{% for post in collections.posts %}
- [{{post.data.title}}]({{ post.url}})
{% endfor %}
