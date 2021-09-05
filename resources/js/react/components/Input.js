import React, {useState, useEffect} from "react";
import ReactDOM from 'react-dom';

const Input = ({id, event, errors, hasErrors}) => {


    return (
        <React.Fragment>
            <div className="row">
                <div className="col-md-6">
                <div className="form-group">
                    <label htmlFor="" className="mb-0 mr-5">Label <span className="text-danger">*</span></label>
                    <input type="text"
                           name="label"
                           className={ hasErrors(`formInput-label-${id}`) ? "form-control form-control-danger" : "form-control" }
                           placeholder="Ex: First Name, Last Name"
                           onChange={(e) => event.setLabel(e.target.value)}
                           onBlur={(e) => event.setLabel(e.target.value)}
                    />
                    <small className="text-danger mt-2">{hasErrors(`formInput-label-${id}`) ? hasErrors(`formInput-label-${id}`).message : null}</small>
                </div>
            </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label htmlFor="" className="mb-0 mr-5">Name <span className="text-danger">*</span></label>
                        <input
                            type="text"
                            name="name"
                            className={ hasErrors(`formInput-name-${id}`) ? "form-control form-control-danger" : "form-control" }
                            placeholder="Ex: first_name, last_name"
                            onChange={(e) => event.setName(e.target.value)}
                            onBlur={(e) => event.setName(e.target.value)}
                        />
                        <small className="text-danger mt-2">{hasErrors(`formInput-name-${id}`) ? hasErrors(`formInput-name-${id}`).message : null}</small>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label htmlFor="" className="mb-0 mr-5">Type</label>
                        <select name="" id="" className="form-control" onChange={(e) => event.setType(e.target.value)}>
                            <option value="text">Text</option>
                            <option value="password">Password</option>
                            <option value="email">Email</option>
                            <option value="number">Number</option>
                        </select>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label htmlFor="" className="mb-0 mr-5">Placeholder</label>
                        <input type="text" name="placeholder" className="form-control" placeholder="Ex: Enter a placeholder"  onChange={(e) => event.setPlaceholder(e.target.value)} />
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="form-group">
                        <label htmlFor="" className="mb-0 mr-5">Value</label>
                        <input type="text" name="value" className="form-control" placeholder="Ex: Default Value"  onChange={(e) => event.setValue(e.target.value)} />
                    </div>
                </div>
            </div>
        </React.Fragment>
    )
}

export default Input;
