/**
 * ADMIN MAIN SCRIPT
 */
import $ from 'jquery';
import TestAdminModule from './_modules-admin/TestAdminModule';
import ReactDOM from 'react-dom';
import React from 'react';
import ReactAdminApp from './_modules-admin/ReactAdminApp';

class App {
  constructor() {
    console.info('ES8 App ADMIN Initialized!');
    // LAUNCING TEST MODULES
    new TestAdminModule();
    // LUNCHING REACT APP
    ReactDOM.render(<ReactAdminApp />, document.getElementById('app2'));
  }
}

// const app = new App();

$(() => {
  new App();
});
