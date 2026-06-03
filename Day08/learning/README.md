# 🚀 DAY 08 - Advanced CSS & Animations

## 🎯 Goal

Learn:
- CSS Transitions
- CSS Transform
- Hover Effects
- CSS Animations
- Keyframes
- Shadows
- Modern UI Effects

Project:
Modern Animated Portfolio Landing Page

Time Spend:
```text
12.00 AM - 3.00 PM
```

---

# Why Learn Advanced CSS?

Advanced CSS helps make websites:

- Interactive
- Professional
- Modern
- Engaging
- User Friendly

Without animations, websites often feel static and boring.

---

# Topics To Learn

## 1. CSS Transition

### What is Transition?

A transition creates a smooth effect when a property changes.

Example:

```css
button{
    background-color:brown;
    transition:0.3s;
}

button:hover{
    background-color:black;
}
```

Result:

```text
Color changes smoothly instead of instantly.
```

---

## 2. Transition Properties

```css
transition-property
transition-duration
transition-delay
transition-timing-function
```

Example:

```css
.card{
    transition: all 0.4s ease;
}
```

---

## 3. CSS Transform

### What is Transform?

Allows movement, scaling, rotation and skewing.

---

### Scale

```css
.card:hover{
    transform:scale(1.05);
}
```

Makes element slightly larger.

---

### Translate

```css
.card:hover{
    transform:translateY(-10px);
}
```

Moves element upward.

---

### Rotate

```css
.card:hover{
    transform:rotate(5deg);
}
```

Rotates element.

---

## 4. Box Shadow

Example:

```css
.card{
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}
```

Purpose:

- Depth
- Professional appearance
- Modern UI

---

## 5. Text Shadow

Example:

```css
h1{
    text-shadow:2px 2px 5px gray;
}
```

---

## 6. CSS Animations

### What is Animation?

Animation changes CSS properties automatically over time.

---

### Keyframes

Example:

```css
@keyframes fadeIn{
    from{
        opacity:0;
    }

    to{
        opacity:1;
    }
}
```

Apply:

```css
.hero{
    animation:fadeIn 1s ease;
}
```

---

## 7. Infinite Animation

Example:

```css
@keyframes bounce{
    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-10px);
    }

    100%{
        transform:translateY(0);
    }
}
```

Apply:

```css
.button{
    animation:bounce 2s infinite;
}
```

---

# Project

## Project Name

Animated Personal Portfolio Website

---

## Project Description

Build a modern portfolio website using:

- HTML
- CSS
- Flexbox
- Grid
- Responsive Design
- Animation

---

# Website Structure

## Header

Contains:

- Logo
- Navigation

Add:

```css
transition
hover effect
```

---

## Hero Section

Contains:

- Name
- Role
- Description
- Button
- Image

Add:

```css
fade in animation
```

---

## Skills Section

Create 4 Cards

Example:

```text
HTML
CSS
Flexbox
Grid
```

Add:

```css
hover scale effect
shadow effect
```

---

## Projects Section

Create 3 Project Cards

Each Card Contains:

1. Project Image
2. Project Name
3. Description
4. View Project Button

Add:

```css
translateY hover effect
```

---

## Contact Section

Contains:

1. Name
2. Email
3. Message
4. Submit Button

Add:

```css
focus effect
```

Example:

```css
input:focus{
    border-color:brown;
}
```

---

## Footer

Contains:

```text
© 2026 Your Name
```

---

# Styling Requirements

## Colors

Choose:

```text
Dark Blue
Black
White
Gray
```

OR

```text
Brown
Cream
White
Dark Brown
```

---

## Typography

```css
font-family:Arial,sans-serif;
```

or

```css
font-family:Poppins,sans-serif;
```

---

# Responsive Requirements

Desktop:

```text
Hero → Text + Image
```

Mobile:

```text
Hero → Text
        Image
```

---

# Practice Challenges

## Challenge 01

Create Animated Button

Requirements:

```css
hover effect
scale effect
transition
```

---

## Challenge 02

Create Hover Card

Requirements:

```css
box-shadow
translateY
transition
```

---

## Challenge 03

Create Loading Animation

Example:

```css
@keyframes spin
```

Create a rotating circle.

---

# Notes

Write Definitions:

1. Transition
2. Transform
3. Animation
4. Keyframes
5. Box Shadow
6. Text Shadow
7. Hover Effect
8. Scale
9. Translate
10. Rotate

---

# Things NOT To Learn Today

❌ JavaScript

❌ React

❌ Tailwind

Master CSS first.

---

# Day 08 Success Checklist

- [ ] Understand Transition
- [ ] Understand Transform
- [ ] Understand Animation
- [ ] Understand Keyframes
- [ ] Understand Box Shadow
- [ ] Build Animated Portfolio
- [ ] Create Hover Effects
- [ ] Create Animated Buttons
- [ ] Create Responsive Layout
- [ ] Complete Practice Challenges

---

# Outcomes

✅ I understand CSS Transitions

✅ I understand CSS Transform

✅ I understand CSS Animations

✅ I can create Hover Effects

✅ I can create Professional Cards

✅ I can create Animated Buttons

✅ I built an Animated Portfolio Website

✅ My Website Looks More Modern

---

## Mentor Task

Before ending Day 08:

Build one section completely without watching any tutorial.

For example:

- Hero Section
OR
- Skills Section
OR
- Projects Section

If you can build it from memory, your CSS skills are improving significantly.