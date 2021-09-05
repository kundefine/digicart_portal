import React, {useState} from "react";
import ReactDOM from 'react-dom';

const Textarea = ({id, event, errors, hasErrors}) => {
    return (
        <React.Fragment>
            <div className="form-group">
                <label htmlFor="">Label</label>
                <input
                    type="text"
                    name="label"
                    className={ hasErrors(`formTextarea-name-${id}`) ? "form-control form-control-danger" : "form-control" }
                    placeholder="Ex: First Name, Last Name"
                    onChange={(e) => event.setLabel(e.target.value)}
                    onBlur={(e) => event.setLabel(e.target.value)}
                />
                <small className="text-danger mt-2">{hasErrors(`formTextarea-label-${id}`) ? hasErrors(`formTextarea-label-${id}`).message : null}</small>
            </div>
            <div className="form-group">
                <label htmlFor="">Name</label>
                <input
                    type="text"
                    name="name"
                    className={ hasErrors(`formTextarea-name-${id}`) ? "form-control form-control-danger" : "form-control" }
                    placeholder="Ex: first_name, last_name"
                    onChange={(e) => event.setName(e.target.value)}
                    onBlur={(e) => event.setName(e.target.value)}
                />
                <small className="text-danger mt-2">{hasErrors(`formTextarea-name-${id}`) ? hasErrors(`formTextarea-name-${id}`).message : null}</small>

            </div>
            <div className="form-group">
                <label htmlFor="">Value</label>
                <input
                    type="text"
                    name="value"
                    className="form-control"
                    placeholder="Ex: Default Value"
                    onChange={(e) => event.setValue(e.target.value)} />
            </div>

            <div className="form-group">
                <label htmlFor="">Placeholder</label>
                <input type="text" name="value" className="form-control" placeholder="Ex: Default Value"  onChange={(e) => event.setPlaceholder(e.target.value)} />
            </div>
        </React.Fragment>
    )
}

export default Textarea;
