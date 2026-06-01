# 🚀 Day 06 - CSS Grid Layout

## 🎯 Goal

Today you will learn:

- CSS Grid
- Grid Container
- Grid Items
- Rows and Columns
- Grid Gap
- Repeat Function
- Fraction Units (fr)
- Responsive Grid Layouts

---

# Why Learn CSS Grid?

Flexbox is best for:

- Navigation Bars
- Hero Sections
- Small Components

CSS Grid is best for:

- Dashboards
- Product Sections
- Galleries
- Admin Panels
- Complex Website Layouts

Modern frontend developers use both Flexbox and Grid together.

---

# ⏰ Study Plan (4 Hours)

## Hour 1 - Understanding CSS Grid

### Grid Container

HTML

```html
<div class="container">
    <div class="box">1</div>
    <div class="box">2</div>
    <div class="box">3</div>
</div>
```

CSS

```css
.container{
    display:grid;
}
```

---

### Creating Columns

```css
.container{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
}
```

Result:

```text
1     2     3
```

---

### Using Repeat

Instead of:

```css
grid-template-columns: 1fr 1fr 1fr;
```

Use:

```css
grid-template-columns: repeat(3,1fr);
```

Professional developers use this frequently.

---

### Grid Gap

```css
.container{
    gap:20px;
}
```

Adds spacing between items.

---

## Hour 2 - Advanced Grid Concepts

### Different Column Sizes

```css
grid-template-columns: 1fr 2fr 1fr;
```

Result:

```text
Small   Large   Small
```

---

### Grid Rows

```css
grid-template-rows: 100px 100px;
```

Creates two rows.

---

### Responsive Grid

```css
.container{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(250px,1fr));
}
```

This automatically adjusts cards according to screen size.

Very important.

---

### Centering Items

```css
.container{
    place-items:center;
}
```

---

## Hour 3 - Main Project

# 🎨 Project Name

Modern Product Showcase Website

---

# Project Description

Create a product showcase webpage for an online store.

The website should display multiple products in a professional grid layout.

This project will simulate a real ecommerce homepage.

---

# Sections

## Header

Contains:

- Website Logo
- Navigation Menu

Example:

```text
ShopGrid      Home Products About Contact
```

Use Flexbox.

---

## Hero Section

Contains:

- Main Heading
- Short Description
- Shop Now Button

Example:

```text
Discover Amazing Products

Shop the latest collection today.

[ Shop Now ]
```

Use Flexbox.

---

## Product Section

Create 6 Product Cards.

Each Card Contains:

- Product Image Placeholder
- Product Name
- Product Price
- Product Description
- Buy Now Button

Example:

```text
------------------
Product Image

Chocolate Box
$20

Premium Chocolate

[ Buy Now ]
------------------
```

---

## Product Grid Layout

Desktop:

```text
Card1  Card2  Card3

Card4  Card5  Card6
```

Use CSS Grid.

---

## Footer

Contains:

```text
© 2026 ShopGrid
All Rights Reserved
```

---

# Project Requirements

### Desktop

- 3 columns
- Equal spacing
- Proper alignment

---

### Tablet

- 2 columns

---

### Mobile

- 1 column

---

### Styling Requirements

- Rounded corners
- Card shadows
- Hover effect
- Consistent spacing
- Professional typography

---

## Hour 4 - Practice Challenge

# Challenge 1

Create a Photo Gallery

Desktop:

```text
Image Image Image

Image Image Image
```

Use Grid.

---

# Challenge 2

Create a Dashboard Layout

```text
----------------------
| Sidebar | Content |
----------------------
```

Use:

```css
grid-template-columns: 250px 1fr;
```

---

# Challenge 3

Create a Team Members Section

Desktop:

```text
Member Member Member Member
```

Mobile:

```text
Member
Member
Member
Member
```

Use responsive Grid.

---

# Important Concepts

## Fraction Unit

```css
1fr
```

Means:

"One fraction of available space."

Example:

```css
grid-template-columns:
1fr 1fr 1fr;
```

Three equal columns.

---

## Repeat Function

```css
repeat(3,1fr)
```

Equivalent to:

```css
1fr 1fr 1fr
```

---

## Auto Fit

```css
repeat(auto-fit,minmax(250px,1fr))
```

One of the most useful Grid techniques.

---

# Notes

Write these definitions:

1. CSS Grid
2. Grid Container
3. Grid Item
4. Fraction Unit (fr)
5. Repeat Function
6. Grid Gap
7. Auto Fit
8. Minmax

---

# Things NOT to Learn Today

❌ JavaScript

❌ React

❌ CSS Frameworks

Master Grid first.

---

# Day 06 Success Checklist

- [ ] Understand CSS Grid
- [ ] Understand Grid Columns
- [ ] Understand Grid Rows
- [ ] Understand Gap
- [ ] Understand Repeat
- [ ] Understand Fraction Units
- [ ] Build Product Showcase Website
- [ ] Build Responsive Product Grid
- [ ] Complete Gallery Challenge
- [ ] Complete Dashboard Challenge

---

# 🎯 Expected Result

After Day 06 you should be able to:

- Build modern grid layouts
- Create responsive card sections
- Build galleries
- Build dashboard structures
- Combine Flexbox and Grid effectively

---

# Bonus Task (For Portfolio)

Build a "Chocolate Product Showcase" page containing:

- Hero Section
- 8 Chocolate Product Cards
- Responsive Grid Layout
- Hover Effects
- Footer

Upload it to GitHub and add screenshots to your repository.

This project can become one of your first portfolio projects.