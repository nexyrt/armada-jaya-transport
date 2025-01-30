import './bootstrap';
import collapse from '@alpinejs/collapse'
import intersect from '@alpinejs/intersect'
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.plugin(intersect)
Alpine.plugin(collapse)
Alpine.start()
