import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import eslintPlugin from 'vite-plugin-eslint';

export default defineConfig({
  plugins: [
    react(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.tsx'],
      refresh: true
    }),
    eslintPlugin({
      cache: false,
      throwOnWarning: false,
      throwOnError: true,
      include: ['resources/js/**/*.ts', 'resources/js/**/*.tsx'],
      exclude: ['node_modules', 'dist', 'resources/js/vendor']
    })
  ]
});
