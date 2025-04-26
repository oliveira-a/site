---
draft: true
title: mobup! - Deep diving into Next.js
---

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

## libraries

Recommended by my colleague, I picked shadcn/ui as my component library. It's not
only beautiful and untuitive but the components are super well designed and easy
to adapt to anyone's needs.

## challenges

### implementing auth
If you know how OAuth works, this shouldn't be too hard to grasp and implement.
However, the poor documentation from Auth.js made this a not so straightforward
exercise. So, understanding how to implement auth was probably the hardest
challenge, but fun nonetheless. Thankfully, ChatGPT came to the rescue and
guided when I was stuck.

## take-aways


## conclusion
