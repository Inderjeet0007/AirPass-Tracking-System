from django.contrib.auth.decorators import login_required
from django.shortcuts import render,  get_object_or_404
from django.urls import reverse
from django.shortcuts import HttpResponseRedirect
from Airpass.models import beacons
from django.contrib import messages

@login_required(login_url='/')
def beacon(request):
    b = beacons.objects.all()
    context = {
        "object": b
    }
    return render(request, "beacon.html", context)

@login_required(login_url='/')
def anb(request):
    context={}
    return render(request, "add_new_b.html", context)

@login_required(login_url='/')
def delete_b_v(request, id):
    db = get_object_or_404(beacons, id=id)
    # r = dr.reader_id
    context = {
        "object": id
    }
    return render(request, "delete_beacon_view.html", context)

@login_required(login_url='/')
def update_b_v(request, id):
    dr = beacons.objects.get(id=id)
    context = {
        "object": dr
    }
    return render(request, "update_beacon.html", context)

@login_required(login_url='/')
def store_new_beacon(request):
    if request.method == 'POST':
        b = beacons()
        b.b_name = request.POST.get('b_name')
        b.mac_add = request.POST.get('mac_add')
        b.save()
        be = beacons.objects.all()
        context = {
            "object": be
        }
        return render(request, 'beacon.html', context)
    else:
        return render(request,'add_new_b.html')

@login_required(login_url='/')
def delete_beacon(request, id):
    db = get_object_or_404(beacons, id=id)
    if request.method == "POST":
        db.delete()
        messages.success(request, "Post successfully deleted!")
        return HttpResponseRedirect("/apts_main/beacon")
    be = beacons.objects.all()
    context = {
        "object": be
    }
    return render(request, 'beacon.html', context)


@login_required(login_url='/')
def update_beacon(request, id):
    ub = get_object_or_404(beacons, id=id)
    if request.method == "POST":
        ub.b_name = request.POST.get('b_name')
        ub.mac_add = request.POST.get('mac_add')
        ub.save()
        # messages.success(request, "Post successfully deleted!")
        return HttpResponseRedirect("/apts_main/beacon")
    be = beacons.objects.all()
    context = {
        "object": be
    }
    return render(request, 'beacon.html', context)
