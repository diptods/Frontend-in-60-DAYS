# 🚀 Day 05 - Responsive Web Design & Media Queries

## 🎯 Goal

Today you will learn:

- Responsive Web Design
- Mobile First Design
- Media Queries
- Responsive Navigation
- Responsive Cards
- Responsive Hero Section

---

## Why Learn Responsive Design?

More than 60% of users browse websites from mobile devices.

A website that looks good on desktop but breaks on mobile is considered incomplete.

Responsive design is a mandatory skill for every frontend developer.

---

## ⏰ Study Plan (4 Hours)

### Hour 1 - Learn Responsive Design Basics

#### What is Responsive Design?

Responsive Design means:

- Website adapts to different screen sizes
- Works on mobile
- Works on tablet
- Works on desktop

---

### Viewport Meta Tag

Every website should include:

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

---

### Responsive Units

Instead of:

```css
width: 500px;
```

Try:

```css
width: 100%;
```

---

## Hour 2 - Learn Media Queries

### Basic Media Query

```css
@media (max-width: 768px) {
    body {
        background-color: lightgray;
    }
}
```

Meaning:

When screen width becomes 768px or smaller, apply these styles.

---

### Mobile Navigation Example

Desktop:

```css
.navbar{
    display:flex;
    justify-content:space-between;
}
```

Mobile:

```css
@media (max-width:768px){
    .navbar{
        flex-direction:column;
    }
}
```

---

### Responsive Cards Example

Desktop:

```css
.cards{
    display:flex;
    gap:20px;
}
```

Mobile:

```css
@media (max-width:768px){
    .cards{
        flex-direction:column;
    }
}
```

---

## Hour 3 - Project

# Responsive Portfolio Website

### Sections

#### Header

- Logo
- Navigation

#### Hero Section

- Name
- Role
- Short Description
- Button
- Image

#### Skills Section

- HTML
- CSS
- Flexbox

#### Footer

- Copyright Text

---

### Requirements

Desktop:

- Navigation in one row
- Hero image beside text
- Skills cards in one row

Mobile:

- Navigation stacked vertically
- Hero image below text
- Skills cards stacked vertically

---

## Hour 4 - Practice Challenge

### Challenge 1

Create:

```text
3 Cards in Desktop
```

Mobile:

```text
Card 1
Card 2
Card 3
```

---

### Challenge 2

Responsive Navigation

Desktop:

```text
Logo     Home About Contact
```

Mobile:

```text
Logo

Home
About
Contact
```

---

### Challenge 3

Responsive Hero Section

Desktop:

```text
Text      Image
```

Mobile:

```text
Text

Image
```

---

## Important Concepts

### Width

```css
width:100%;
```

---

### Max Width

```css
max-width:1200px;
```

---

### Overflow Prevention

```css
img{
    max-width:100%;
}
```

---

### Mobile Breakpoints

Common breakpoints:

```css
576px
768px
992px
1200px
```

---

## Mini Project

Build:

### Responsive Product Showcase

Each product card contains:

- Product Image
- Product Name
- Product Price
- Buy Button

Desktop:

- 3 cards in a row

Mobile:

- 1 card per row

---

## Notes

Write these definitions:

1. Responsive Design
2. Media Query
3. Mobile First Design
4. Breakpoint
5. Max Width
6. Responsive Layout

---

## Things NOT to Learn Today

❌ CSS Grid

❌ JavaScript

❌ React

Master Responsive Design first.

---

# ✅ Day 05 Success Checklist

- [ ] Understand Responsive Design
- [ ] Understand Media Queries
- [ ] Build Responsive Navigation
- [ ] Build Responsive Hero Section
- [ ] Build Responsive Cards
- [ ] Complete Responsive Portfolio Project
- [ ] Complete Product Showcase Challenge

---

# 🎯 Expected Result

After Day 05, you should be able to create websites that work properly on:

- Mobile
- Tablet
- Desktop

This is one of the most valuable frontend skills because clients and companies expect every modern website to be responsive.