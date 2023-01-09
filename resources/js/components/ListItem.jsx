import picture from "../Assets/Images/profile.jpg";

export default function ListItem(props) {
    return (
        <div>
            {props.checkOnline ? 
                props.online ? 
                    <div className="center-01">
                        <div className="sm:w-75 bg-gray-200 rounded-lg mb-3 mt-6 sm:mb-1 sm:ml-14 sm:ml-auto sm:mr-auto center-02">
                            <article className="flex items-start space-x-6 px-2 sm:px-5 py-4 sm:py-6 sm:mt-12 mb-5 mx-2 sm:mr-14 sm:ml-14">
                                <img
                                    src={picture} alt="" width="60" height="88" className="flex-none rounded-md bg-slate-100"/>
                                <div className="min-w-0 relative flex-auto">
                                    <h2 className="font-semibold text-slate-900 truncate pr-20">
                                        {props.title}
                                    </h2>
                                    <dl className="mt-2 flex flex-wrap text-sm leading-6 font-medium">
                                        <div className="absolute top-0 right-0 flex items-center space-x-1">
                                            <button
                                                type="button"
                                                className="px-2 py-1.5 sm:py-2 sm:px-4 flex justify-center items-center  bg-teal-500 hover:bg-teal-500 focus:ring-teal-500 focus:ring-offset-teal-500 text-white w-full text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                                Book Now
                                            </button>
                                        </div>
                                        <div>
                                            <dt className="sr-only">Rating</dt>
                                            <dd className="px-1.5 ring-1 ring-slate-200 rounded">
                                                {props.yrs}+ yrs
                                            </dd>
                                        </div>
                                        <div className="flex-none w-full mt-2 font-normal">
                                            <dt className="sr-only">Cast</dt>
                                            <dd className="text-slate-400">
                                                {props.cast}
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </article>
                        </div>
                    </div>
                 : <div></div>
                
             : props.onsite ? 
                <div className="center-01">
                    <div className="sm:w-75 bg-gray-200 rounded-lg mb-3 mt-6 sm:mb-1 sm:ml-14 sm:ml-auto sm:mr-auto center-02">
                        <article className="flex items-start space-x-6 px-2 sm:px-5 py-4 sm:py-6 sm:mt-12 mx-2 mb-5 sm:mr-14 sm:ml-14">
                            <img
                                src={picture}
                                alt=""
                                width="60"
                                height="88"
                                className="flex-none rounded-md bg-slate-100"
                            />
                            <div className="min-w-0 relative flex-auto">
                                <h2 className="font-semibold text-slate-900 truncate pr-20">
                                    {props.title}
                                </h2>
                                <dl className="mt-2 flex flex-wrap text-sm leading-6 font-medium">
                                    <div className="absolute top-0 right-0 flex items-center space-x-1">
                                        <button
                                            type="button"
                                            className="px-2 py-1.5 sm:py-2 sm:px-4 flex justify-center items-center  bg-teal-500 hover:bg-teal-500 focus:ring-teal-500 focus:ring-offset-teal-500 text-white w-full text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg"
                                        >
                                            Book Now
                                        </button>
                                    </div>
                                    <div>
                                        <dt className="sr-only">Rating</dt>
                                        <dd className="px-1.5 ring-1 ring-slate-200 rounded">
                                            {props.yrs}+ yrs
                                        </dd>
                                    </div>
                                    <div className="flex-none w-full mt-2 font-normal">
                                        <dt className="sr-only">Cast</dt>
                                        <dd className="text-slate-400">
                                            {props.cast}
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </article>
                    </div>
                </div>
             : <div></div>
            }
        </div>
    );
}
