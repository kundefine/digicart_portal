import ReactDOM from "react-dom";
import React from "react";
import FormGenerator from "./components/FormGenerator";



if (document.getElementById('formGenerator')) {
    ReactDOM.render(<FormGenerator />, document.getElementById('formGenerator'));
}
