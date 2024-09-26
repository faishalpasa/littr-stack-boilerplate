<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.tsx'])
    <!-- In this article, we are going to use JSX syntax for React components -->
    @inertiaHead

    {!! \App\Meta::render() !!}
  </head>
  <body>
    @inertia
  </body>
</html>
