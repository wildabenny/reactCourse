import React from 'react';
import ReactDOM from 'react-dom';

var template = (
    <div>
        <h1>React działa po odświeżeniu lalla</h1>
        <p>Tekst w paragrafie</p>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
        </ul>
    </div>);
var appRoot = document.getElementById('app');

ReactDOM.render(template, appRoot);