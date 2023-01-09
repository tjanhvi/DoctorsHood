import React from "react";
import ReactDOM from "react-dom";
import Appmain from "./Appmain";
import { BrowserRouter } from "react-router-dom";
const Index = () => {
  return (
    <BrowserRouter>
      <Appmain />
    </BrowserRouter>
  );
};

export default Index;
if(document.getElementById('root')){
  ReactDOM.render(<Index />, document.getElementById('root'));
}