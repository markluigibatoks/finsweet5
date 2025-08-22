import Drawer from "./scripts/Drawer"
import FormContactUs from "./scripts/FormContactUs";
import FormNewsletter from "./scripts/FormNewsletter";

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')

  const contactUsForm = document.querySelector('#contact-us-form');
  if (contactUsForm) {
    new FormContactUs('#contact-us-form');
  }

  const newsletterForm = document.querySelector('#newsletter-form');
  if (newsletterForm) {
    new FormNewsletter('#newsletter-form');
  }
});
