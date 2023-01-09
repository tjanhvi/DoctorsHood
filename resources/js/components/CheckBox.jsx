import React from "react";

const CheckBox = (props) => {
  return(
    <div className='checkbox-div'>
        <label className="inline-flex items-center">
        <input type="radio" name="vehicle" className="h-5 w-5 text-red-600"/>
            <span className="ml-2 text-gray">
                {props.gender}
            </span>
        </label>
    </div>
  );
};

export default CheckBox;
