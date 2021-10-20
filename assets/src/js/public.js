/**
 * PUBLIC MAIN SCRIPT
 */
import ReactDOM from 'react-dom';
import React from 'react';
import ReactAppOne from './_modules-public/ReactAppOne';
import TestPubModule from './_modules-public/TestPubModule';

class App {
  constructor() {
    console.info('ES8 App PUBLIC Initialized!');
    // LAUNCING TEST MODULE
    new TestPubModule();
    // LUNCHING REACT APP
    ReactDOM.render(<ReactAppOne />, document.getElementById('app1'));
  }
}

const app = new App();
