import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from '../util';
import {Map} from '../map';
import PropTypes from 'prop-types';

export class MousePosition extends React.Component<any, any> {

  control: ol.control.MousePosition;

  options:  {
    className: undefined,
    coordinateFormat: undefined,
    projection: undefined,
    render: undefined,
    target: undefined,
    undefinedHTML: undefined
  };

  events:  {
    'change': undefined,
    'change:coordinateFormat': undefined,
    'change:projection': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.control = new ol.control.MousePosition(options);
    this.context.mapComp.controls.push(this.control)

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.control.on(eventName, olEvents[eventName]);
    }
  }

}

MousePosition['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
