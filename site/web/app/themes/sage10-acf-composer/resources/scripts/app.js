import { domReady } from '@roots/sage/client';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import collapse from '@alpinejs/collapse';
import lozad from 'lozad';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code

  // Initialize AlpineJS & Extensions
  window.Alpine = Alpine
  Alpine.plugin(focus)
  Alpine.plugin(collapse)
  Alpine.start()

  // Initialize Lozad
  const observer = lozad();
  observer.observe();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
