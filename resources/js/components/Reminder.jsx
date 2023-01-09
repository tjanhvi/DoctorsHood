import React, { useState } from "react";
import jar from "../Assets/Images/jar.png";
import other from "../Assets/Images/other.png";
import pills from "../Assets/Images/pills.png";
import syringe from "../Assets/Images/syringe.png";
import tablet from "../Assets/Images/tablet.png";
import calendericon from "../Assets/Images/calendericon.png";

const Reminder = () => {
    const [clickable, setClickable] = useState('');
    const [click, setClick] = useState('');
    const [click1, setClick1] = useState(false);
    const [click2, setClick2] = useState(0);
    function handleChanger(e){
        setClick2(e.target.value);
    }
    function Time(){
        return(
            <div className="inline p-1">
                <input type="time" id="mytime" defaultValue="09:00" className="bg-gray-200 h-7 w-18 rounded-lg mt-4"/>
            </div>
        )
    }

    function Controller2(){
        var selectTime = [];
        for(var i = 0; i < click2; i++){
            selectTime.push(<Time/>);
        }
        return <div className="sm:flex ml-4">{selectTime}</div>;
    }
    function Controller(){
        if(click1 == true){
            return(
            <div className="mt-4">
                <div className="bg-gray-200 sm:w-96 h-8 rounded-lg ">
                    <label htmlFor="specialisation" className="mt-1.5">
                        Reminder
                    </label>
                    <select name="reminder" id="reminder" onChange={handleChanger} className='border border-transparent rounded-lg bg-gray-50 ml-2'>
                    <option value="0">How many times per day ?</option>
                    <option value="1">Once a day</option>
                    <option value="2">2 times a day</option>
                    <option value="3">3 times a day</option>
                    <option value="4">4 times a day</option>
                    <option value="5">5 times a day</option>
                    </select>
                </div>
                    <Controller2/>
                    
            </div> 
            )
        }else{
            return <p></p>;
        }
    }
    
    return (
    <div className="center-03">
        <div className="reminder bg-white dark:bg-gray-800 mt-20 sm:w-5/6 sm:ml-24 ">
        <div className="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
            <div className=" relative text-justify -mt-10">
                <label htmlFor="name-with-label" className="text-gray-700 text-base">
                    Medication Name:
                </label>
                <input type="text" id="name-with-label" className=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-65 py-0.5 px-4 bg-white text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-green focus:border-transparent ml-4" name="medicine" placeholder="e.g. Paracetanol"/>
            </div>    

        <div className="flex flex-row">
            <div className="relative text-justify mt-4">
                <input type="text" id="rounded-email" className=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-16 py-0.5 px-1 bg-white text-gray-700 placeholder-gray-400 text-base focus:outline-none focus:ring-2 focus:ring-green focus:border-transparent" placeholder="1"/> 
            </div>

            <div>
            <select className="block w-52 text-gray-700 py-1 px-3 border border-gray-300 bg-white rounded-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 mt-4 ml-4" name="pills">
            <option value="">Pills(s)</option>
            <option value="cc">Cc</option>
            <option value="mi">MI</option>
            <option value="gr">Gr</option>
            <option value="mg">Mg</option>
            <option value="drop">Drop(s)</option>
            <option value="piece">Piece(s)</option>
            <option value="puff">Puff(s)</option>
            <option value="unit">Unit(s)</option>
            <option value="teaspoon">Teaspoon(s)</option>
            <option value="tablespoon">Tablespoon(s)</option>
            <option value="patch">Patch</option>
            <option value="mcg">Mcg</option>
            <option value="iu">Iu</option>
            <option value="meq">Meq</option>
            <option value="carton">Carton</option>
            <option value="spray">Spray</option>
            </select>
            </div>
        </div>

            <div className="relative text-justify mt-4">
                <label htmlFor="name-with-label" className="text-gray-700 text-base">
                Medication Type:
                </label>
            </div>
        
        <div className="flex flex-row mt-3">
            <div className={clickable == 'Liquid' ? "bg-[#A9F1DF] h-13 w-14 sm:h-20 sm:w-20 cursor-pointer" : "bg-gray-200 h-13 w-14 sm:h-20 sm:w-20 cursor-pointer cursor-pointer"} onClick={()=>setClickable('Liquid')}>
               <img className="m-auto mt-2 sm:w-10 sm:h-10 w-5 h-5" src={jar}/>
               <p className="mt-1">Liquid</p>
            </div>
            <div className={clickable == 'Pill' ? "bg-[#A9F1DF] h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer" : "bg-gray-200 h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer"} onClick={()=>setClickable('Pill')}>
                <img className="m-auto mt-2 sm:w-10 sm:h-10 w-5 h-5" src={pills}/>
                <p className="mt-1">Pill</p>
            </div>
            <div className={clickable == 'Syringe' ? "bg-[#A9F1DF] h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer" : "bg-gray-200 h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer"} onClick={()=>setClickable('Syringe')}>
            <img className="m-auto mt-2 sm:w-10 sm:h-10 w-5 h-5" src={syringe}/>
            <p className="mt-1">Syringe</p>
            </div>
            <div className={clickable == 'Tablet' ? "bg-[#A9F1DF] h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer" : "bg-gray-200 h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer"} onClick={()=>setClickable('Tablet')}>
            <img className="m-auto mt-2 sm:w-10 sm:h-10 w-5 h-5" src={tablet}/>
            <p className="mt-1 ">Tablet</p>
            </div>
            <div className={clickable == 'Other' ? "bg-[#A9F1DF] h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer" : "bg-gray-200 h-13 w-14 sm:h-20 sm:w-20 ml-5 cursor-pointer"} onClick={()=>setClickable('Other')}>
            <img className="m-auto mt-2 sm:w-10 sm:h-10 w-5 h-5" src={other}/>
            <p className="mt-1 test-xs">Other</p>
            </div>
        </div>

        <div className="relative text-justify mt-4">
            <label htmlFor="name-with-label" className="text-gray-700 text-base">
                Instructions:
            </label>
            </div>

            <div className="sm:flex  mt-3">
            <button type="button" className={click == 'No Instructions' ? "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-[#A9F1DF] text-gray-600 text-center text-base font-semibold rounded-lg " : "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-gray-200 text-gray-600 text-center text-base rounded-lg "} onClick={()=>setClick('No Instructions')}>
            No Instructions
            </button>
            <button type="button" className={click == 'Before eating' ? "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-[#A9F1DF] text-gray-600 text-center text-base rounded-lg ml-5" : "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-gray-200 text-gray-600 text-center text-base rounded-lg ml-5"} onClick={()=>setClick('Before eating')}>
            Before eating
            </button>
            <button type="button" className={click == 'After eating' ? "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-[#A9F1DF] text-gray-600 text-center text-base rounded-lg ml-5" : "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-gray-200 text-gray-600 text-center text-base rounded-lg ml-5"} onClick={()=>setClick('After eating')}>
            After eating
            </button>
            <button type="button" className={click == 'While eating' ? "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-[#A9F1DF] text-gray-600 text-center text-base rounded-lg ml-5" : "m-2 sm:m-0 w-28 sm:w-44 h-8 sm:flex justify-center items-center bg-gray-200 text-gray-600 text-center text-base rounded-lg ml-5"} onClick={()=>setClick('While eating')}>
            While eating
            </button>
            </div>

            <div className="mt-10">
                <div className="bg-gray-200 sm:w-96 h-8 rounded-lg">
                <p className="text-justify ml-8 text-gray-700 text-lg">Schedule & Reminder</p>
            
                <div className="text-right -mt-6">
                    <div className="relative inline-block w-10 mr-10 sm:mr-20 align-middle select-none">
                    <input onClick={()=> setClick1(!click1)} type="checkbox" name="toggle" id="Blue" className={click1 ? "checked:bg-teal-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-teal-500 border-4 appearance-none cursor-pointer" : "checked:bg-teal-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"}/>
                    <label htmlFor="Blue" className="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                    </label>
                    </div>
                </div>
                </div>
                <Controller/>
            </div>

        </div>
        </div>
    </div>
    );
}

export default Reminder;