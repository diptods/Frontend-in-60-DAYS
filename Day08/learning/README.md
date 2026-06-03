# 🚀 DAY 08 - Tailwind CSS Basics

## 🎯 Goal

Learn:
- What is Tailwind CSS
- Utility Classes
- Layout Utilities
- Colors
- Spacing
- Typography
- Flexbox in Tailwind
- Responsive Design in Tailwind

Project:
GameVerse Esports Tournament Website


---

# What is Tailwind CSS?

Tailwind CSS is a Utility-First CSS Framework.

Instead of writing:

```css
.btn{
    background-color: blue;
    color: white;
    padding: 10px;
}
```

You write:

```html
<button class="bg-blue-500 text-white px-4 py-2">
    Button
</button>
```

---

# Why Learn Tailwind?

Benefits:

1. Faster Development
2. Less CSS Writing
3. Responsive Utilities Built-in
4. Industry Standard
5. Great for React Projects

---

# Installation Methods

## CDN Method (For Learning)

```html
<script src="https://cdn.tailwindcss.com"></script>
```

Place inside:

```html
<head>
```

---

# Learn Core Classes

## Background Color

```html
<div class="bg-blue-500">
```

---

## Text Color

```html
<p class="text-white">
```

---

## Font Size

```html
<h1 class="text-4xl">
```

---

## Padding

```html
class="p-4"
```

---

## Margin

```html
class="m-4"
```

---

## Border Radius

```html
class="rounded-lg"
```

---

## Shadow

```html
class="shadow-lg"
```

---

# Flexbox In Tailwind

Container:

```html
<div class="flex">
```

---

Center Items:

```html
<div class="flex justify-center items-center">
```

---

Space Between:

```html
<div class="flex justify-between">
```

---

# Responsive Design

Mobile First Approach

Example:

```html
<div class="text-sm md:text-lg lg:text-2xl">
```

Meaning:

Mobile:

```text
small text
```

Tablet:

```text
large text
```

Desktop:

```text
extra large text
```

---

# Project

## Project Name

GameVerse Esports Tournament Website

---

# Sections

## Header

Contains:

- Logo
- Navigation

Use:

```html
flex
justify-between
items-center
```

---

## Hero Section

Contains:

- Name
- Title
- Description
- Button

Use:

```html
text-center
```

or

```html
flex
```

---

## Skills Section

Create 4 Cards:

- HTML
- CSS
- Flexbox
- Grid

Use:

```html
grid
gap
shadow
rounded
```

---

## Projects Section

Create 3 Cards

Each Contains:

- Project Image
- Project Name
- Description
- Button

---

## Footer

Contains:

```text
© 2026 Your Name
```

---

# Practice Challenges

## Challenge 01

Create:

Modern Button

Requirements:

- Rounded
- Hover Effect
- Shadow

---

## Challenge 02

Create:

Profile Card

Contains:

- Image
- Name
- Role
- Button

---

## Challenge 03

Create:

Responsive 3 Card Layout

Desktop:

Card Card Card

Mobile:

Card
Card
Card

---

# Important Tailwind Utilities

## Layout

```html
flex
grid
block
hidden
```

---

## Spacing

```html
p-4
m-4
gap-4
```

---

## Typography

```html
text-xl
text-2xl
font-bold
```

---

## Colors

```html
bg-blue-500
bg-red-500
text-white
```

---

## Effects

```html
shadow-lg
rounded-lg
hover:bg-blue-700
```

---

# Notes

Write Definitions:

1. Tailwind CSS
2. Utility First Framework
3. Responsive Utility
4. Flexbox Utility
5. Grid Utility
6. Spacing Utility

---

# Day 08 Success Checklist

- [ ] Install Tailwind
- [ ] Understand Utility Classes
- [ ] Use Colors
- [ ] Use Typography
- [ ] Use Spacing
- [ ] Use Flexbox
- [ ] Use Grid
- [ ] Build Landing Page
- [ ] Complete Challenges

---

# Outcomes

✅ I understand Tailwind CSS

✅ I can use Utility Classes

✅ I can create Layouts using Tailwind

✅ I can build Responsive Designs

✅ I built my first Tailwind Project

✅ I am ready for larger Tailwind projects