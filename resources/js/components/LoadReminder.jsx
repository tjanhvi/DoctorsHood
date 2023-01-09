import react from "react";
import Calendar from 'react-calendar'
import 'react-calendar/dist/Calendar.css';
import addicon from "../Assets/Images/addicon.png";

const LoadReminder = () => {
    return (
        <div className="bg-white shadow w-4/6 h-66 justify-center m-auto p-0 text-center">
            <div className="cal mt-44">
                <Calendar />
            </div>
            
            <div className="mt-2">
                <button className="bg-gray-200 rounded-full w-18 h-18">
                    <img className="mx-98" src={addicon}/>
                </button>
            </div>

            <div className="justify-center">
                <h3 className="text-red-600 font-bold">Add Reminder</h3>
                <p>No reminders are scheduled for this date</p>
            </div>
            
        </div>
    );
}

export default LoadReminder;    

