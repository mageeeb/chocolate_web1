# AI Agent Instructions for OmerChocolate_web1

## Project Overview
This is a chocolate recipe website built with a combination of traditional web technologies and modern frameworks. The project uses a hybrid structure with both static HTML/CSS/JS files and a React-based application.

## Architecture
- Static Website (`/OmerChocolate_web1`): Contains traditional web pages
  - `index.html`, `about.html`, `contact.html`: Main static pages
  - `/css`: Contains styling including Bootstrap and custom styles
  - `/js`: Client-side JavaScript for animations and interactions
  - `/images`: Image assets
  - `/fonts`: Typography assets including Bootstrap and Icomoon fonts

- React Application (`/chocolat-coeur-recette`): Modern recipe interface
  - Built with React, TypeScript, and TailwindCSS
  - Uses shadcn/ui components for UI elements
  - Query management via TanStack Query (React Query)

## Key Patterns and Conventions

### Design System
- Color scheme is defined in HSL format in `src/index.css`
- Custom design tokens:
  ```css
  --chocolate-dark: 25 47% 30%;
  --chocolate-medium: 28 40% 50%;
  --chocolate-light: 28 35% 75%;
  --cream: 32 45% 96%;
  --warm-white: 30 50% 98%;
  ```
- Typography: 'Playfair Display' for headings, 'Inter' for body text

### Component Structure
- UI components are located in `/components/ui/`
- Custom recipe-specific components:
  - `CommentSection.tsx`: Recipe comments
  - `RecipeStep.tsx`: Individual recipe instructions
  - `StarRating.tsx`: Recipe rating system

### Animations
Custom animation utilities in `src/index.css`:
- `.fade-in`: Vertical fade entrance
- `.slide-in-left`: Left-to-right entrance
- `.slide-in-right`: Right-to-left entrance

### State Management
- Global query state managed by TanStack Query
- Toast notifications via custom hooks (`use-toast.ts`)
- Mobile responsiveness utilities (`use-mobile.tsx`)

## Routing
- React app routes defined in `App.tsx`
- New routes must be added above the catch-all "*" route
- Example:
  ```tsx
  <Routes>
    <Route path="/" element={<Index />} />
    {/* ADD ALL CUSTOM ROUTES ABOVE THE CATCH-ALL "*" ROUTE */}
    <Route path="*" element={<NotFound />} />
  </Routes>
  ```

## Best Practices
1. Use HSL colors defined in `index.css` for consistency
2. Implement responsive designs using TailwindCSS utilities
3. Include animations from the utility classes for consistent motion design
4. Keep static HTML pages in root and React components in `/chocolat-coeur-recette`