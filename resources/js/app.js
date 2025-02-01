import './bootstrap';
import collapse from '@alpinejs/collapse'
import intersect from '@alpinejs/intersect'
import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.plugin(intersect)
Alpine.plugin(collapse)
Alpine.start()
AOS.init();