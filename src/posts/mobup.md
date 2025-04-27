---
draft: true
title: mobup! - Deep diving into Next.js
---
## 1. intro

For the past year, I have been working on a project at work that involves Next.js.
I'm mostly a backend focused engineer but decided to tread into the front-end
world a little and have a look around. We picked Next.js for its ease of use
and it suited the project requirements well. It's backed up by a group of
serverless functions written in .NET and so far, it's been a great pleasure
to work with. So, to get to know Next.js better, I decided to learn it, but
seriously learn it. And my preferred method of learning is by doing. So, I
thought, "why not build a task management app?" -- so cliche you might be
thinking. To turn it a little more fun and challening, I decided to make it a
collaboration platform instead, where users would find teammates to pair up with
based on what skills they want to learn. For example, if someone has a Next.js
task, I can see that and pair up with them, even if they're part of a different
team. As a bonus, we could integrate this with Graph (we use MS Teams) and write
a bot that matches/messages users based on skills to learn and tasks.

Recommended by my colleague, I picked shadcn/ui as my component library. It's not
only beautiful and untuitive but the components are super well designed and easy
to adapt to anyone's needs.

## 2. challenges

### auth

If you know how OAuth works, this shouldn't be too hard to grasp and implement.
However, the poor documentation from Auth.js made this a not so straightforward
exercise. So, understanding how to implement auth was probably the hardest
challenge, but fun nonetheless. Thankfully, ChatGPT came to the rescue and
guided when I was stuck.

## 3. take-aways

### edge runtime

I soon came to realise that some code (middleware) gets executed on this "thing"
called the edge runtime, which is _not_ node. This left me puzzled a few times
when all of the sudden my application would broke when importing a dependency 
that, in itself, depends on node packages.

#### So what's the edge runtime?

Let's begin with 
[the wikipedia's definition of edge computing](https://en.wikipedia.org/wiki/Edge_computing):

> _Edge computing is a distributed computing model that brings computation and
> data storage closer to the sources of data. More broadly, it refers to any
> design that pushes computation physically closer to a user, so as to reduce
> the latency compared to when an application runs on a centralized data
> centre._

Next's _edge_ is based upon this concept. The point is to improve speed by
executing code closer to the user , in _a separate lightweight runtime_. This
is particularly useful for things like ensuring the user has a valid JWT token
and redirection which does not require computation in the application server,
in other words, Node.

## conclusion
