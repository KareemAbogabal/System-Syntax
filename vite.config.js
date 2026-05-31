import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['public/css/website/web/app.css', 'public/js/website/web/app.js'],
      refresh: true,
    }),
    tailwindcss(),
  ],
  server: {
    watch: {
      ignored: ['**/storage/framework/views/**'],
    },
  },
});
