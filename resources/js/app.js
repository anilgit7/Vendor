import 'flowbite';
import jQuery from 'jquery';
window.$ = jQuery;

/*************************** Animation scripts **********************************/
function handleScroll() {
    document.querySelectorAll('.anime').forEach(block => {
      const rect = block.getBoundingClientRect();
      const inView = (rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth));
      if (inView) block.classList.add('anime-off');
    });
  }

  window.addEventListener('scroll', handleScroll);
  handleScroll();
/*************************** Sidebar Collapse ***********************************/
const sidebarToggle = document.querySelector('.sidebar-toggle')
const sidebarOverlay = document.querySelector('.sidebar-overlay')
const sidebarMenu = document.querySelector('.sidebar-menu')
const main = document.querySelector('.mainbar')
sidebarToggle.addEventListener('click', function (e) {
    e.preventDefault()
    main.classList.toggle('active')
    sidebarOverlay.classList.toggle('hidden')
    sidebarMenu.classList.toggle('hidden')
})
sidebarOverlay.addEventListener('click', function (e) {
    e.preventDefault()
    main.classList.add('active')
    sidebarOverlay.classList.add('hidden')
    sidebarMenu.classList.add('hidden')
})
/********************************************************************************/

/*************************** Notification Tabs **********************************/
document.querySelectorAll('[data-tab]').forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault()
        const tab = item.dataset.tab
        const page = item.dataset.tabPage
        const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
        document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function (i) {
            i.classList.remove('active-notification-tabs')
        })
        document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function (i) {
            i.classList.add('hidden')
        })
        item.classList.add('active-notification-tabs')
        target.classList.remove('hidden')
    })
})