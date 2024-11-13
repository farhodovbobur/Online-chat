import './bootstrap';

import './hously/easy_background.js';
import './hously/plugins.init.js';
import './hously/jsvectormap.init.js'
import './hously/app.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const handleChange = () => {
    const fileUploader = document.querySelector('#input-file');
    const getFile = fileUploader.files
    if (getFile.length !== 0) {
        const uploadedFile = getFile[0];
        readFile(uploadedFile);
    }
};
